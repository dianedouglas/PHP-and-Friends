Terminology:
	pretty much the same terminology as ruby.
	a class:
		is a type of object. each new instance of the class is an instance or occurence of the class.
		pieces of data associated with the object are called properties - name, id, size, etc.
		its functions are methods - actions the object can take.
		when defining the class you must name all properties and declare all methods. 
		the methods you make are known as the objects interface.
	
	ex:
	jukebox! holds several cd's, has a make and model, has actions like play, stop, next etc.
	method to insert coins, laser disc reader is the method used to play the music.

	encapsulation:
	make your class in such a way that only its methods can manipulate its properties. 

		safer, more portable. if you are relying on outside code to set the make and model of your jukebox when it's created and then you move the 
		jukebox to a new program, you might forget that and end up with a jukebox created in the year NULL by the company NULL.
		fix faulty code within your class rather than the whole program.
		lets you add features by updating classes with new classes and if you have problems you can switch the old ones back in. 

	inheritance:
	if you need another class similar to one you've made, you could make a new class that inherits from the previous one, with a couple modifications.
	the new class is the subclass, or derived class. old class is now the superclass.
	if you add a video player to your jukebox, you could keep all the old functionality that belonges to your jukebox by inheriting from it, 
	then add features for your video player. 
	this is a huge advantage because if you later improve your audio player or add more cd's to your original jukebox, 
	all its subclasses will automatically have those features too.

